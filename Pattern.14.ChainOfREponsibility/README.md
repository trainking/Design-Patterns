# 责任链模式

责任链模式（Chain of Responsibilty Pattern）为执行对象创建了一个链，无需知道最终哪个对象执行了，谁执行了，只要按照责任链向下传递，根据条件执行


## 优点

1. 降低耦合度
2. 简化对象
3. 增强对象的指派性

## 缺点

1. 不能保证一定找到执行对象
2. 性能受到影响，可能空跑

## 注意事项

> 慎用，串行化每步操作也可以使用这个方式