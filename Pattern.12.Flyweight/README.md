# 亨元模式

亨元模式（Flyweight Pattern）减少重复对象的生成，实际上就是将已经创建的对象缓存起来，如果需要同样对象时返回一个

## 优点

1. 减少大量相似对象
2. 需要利用缓存池的场景

## 缺点

提高了系统复杂度，需要分离内部属性和外部属性，需要用来作为判断的外部属性

## 注意

> 注意外部状态的选用，考虑线程安全