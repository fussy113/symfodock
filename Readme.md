## symfodock

### initialize branch

* symfonyプロジェクトの作成 ~ frontendアプリケーションの作成まで
* dbは設定済

```workspace/config/databases.yml
all:
  doctrine:
    class: sfDoctrineDatabase
    param:
      dsn:      pgsql:host=postgres;dbname=symfodock
      username: symfodock
      password: password
```

### 要件
- Docker for mac
- centos 6.9
- php 5.3
- pgsql 9.6
- **symfony1.4**

```
  # 初期設定
  git clone https://github.com/fussy113/symfodock.git ./
  cd symfodock
  cp .env_example .env

  # 開発開始時に一度実行
  docker-compose up -d

  # 開発終了時に一度実行
  docker-compose down -v
```

* 開発環境URL
http://www.symfonyproject.localhost:8080

* DB直接操作する場合(コンテナ起動時)
`docker-compose exec postgres psql -Usymfodock -W`