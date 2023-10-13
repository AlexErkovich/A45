from sqlalchemy import create_engine, Column, Integer, String
from sqlalchemy.ext.declarative import declarative_base
from sqlalchemy.orm import sessionmaker

Base = declarative_base()

class User(Base):
    __tablename__ = 'users'
    id = Column(Integer, primary_key=True)
    name = Column(String)
    age = Column(Integer)

# Создаем соединение с базой данных
engine = create_engine('mysql://username:password@localhost/dbname')

# Создаем таблицы (если они не существуют)
Base.metadata.create_all(engine)

# Создаем сессию
Session = sessionmaker(bind=engine)
session = Session()

# Пример добавления пользователя
new_user = User(name='John Doe', age=30)
session.add(new_user)
session.commit()

# Пример запроса к базе данных
users = session.query(User).all()
for user in users:
    print(f'User ID: {user.id}, Name: {user.name}, Age: {user.age}')
