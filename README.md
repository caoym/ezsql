[![Build Status](https://travis-ci.org/caoym/ezsql.svg)](https://travis-ci.org/caoym/ezsql)

# ezsql
An easy-to-use SQL builder

## HOW TO USE
    
```PHP
$db = new \PDO($dsn, $username, $passwd);
```

### SELECT
```PHP
$res = Sql::select('a, b')
   ->from('table')
   ->leftJoin('table1')->on('table.id=table1.id')
   ->where('a=?',1)
   ->groupBy('b')->having('sum(b)=?', 2)
   ->orderBy('c', Sql::$ORDER_BY_ASC)
   ->limit(0,1)
   ->forUpdate()->of('d')
   ->get($db);
```
### UPDATE

```PHP
$rows = Sql::update('table')
   ->set('a', 1)
   ->where('b=?', 2)
   ->orderBy('c', Sql::$ORDER_BY_ASC)
   ->limit(1)
   ->exec($db)
   ->rows
```   
### INSERT
```PHP
$newId = Sql::insertInto('table')
   ->values(['a'=>1])
   ->exec($db)
   ->lastInsertId()
```       
### DELETE

```PHP
$rows = Sql::deleteFrom('table')
   ->where('b=?', 2)
   ->orderBy('c', Sql::$ORDER_BY_ASC)
   ->limit(1)
   ->exec($db)
   ->rows
```
