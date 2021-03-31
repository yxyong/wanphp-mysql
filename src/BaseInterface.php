<?php
/**
 * Created by PhpStorm.
 * User: 火子 QQ：284503866.
 * Date: 2020/8/27
 * Time: 9:46
 */

namespace Wanphp\Mysql;


interface BaseInterface
{
  /**
   * 插入自定义数据
   * @param array $data
   * @return int 最后插入数据ID
   * @throws \Exception
   */
  public function insert(array $data): int;

  /**
   * 更新指定数据
   * @param array $data
   * @param array $where
   * @return int 更新数量
   * @throws \Exception
   */
  public function update(array $data, array $where): int;

  /**
   * 自定义查询
   * @param string $columns
   * @param array $where
   * @return array
   * @throws \Exception
   */
  public function select(string $columns = '*', array $where = null): array;

  /**
   * 获取一条数据
   * @param string $columns
   * @param array $where
   * @return mixed
   * @throws \Exception
   */
  public function get(string $columns = '*', array $where = null);

  /**
   * @param string $columns
   * @param array|null $where
   * @return int
   */
  public function count(string $columns = '*', array $where = null): int;

  /**
   * @param string $column
   * @param array|null $where
   * @return float
   */
  public function sum(string $column, array $where = null): float;

  /**
   * 自定义删除
   * @param array $where
   * @return int 删除数量
   * @throws \Exception
   */
  public function delete(array $where): int;

  /**
   * 返回日志
   * @throws \Exception
   */
  public function log();
}
