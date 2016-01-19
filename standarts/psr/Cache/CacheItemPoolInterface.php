<?php ## Интерфейс CacheItemPoolInterface.
  namespace Psr\Cache;

  interface CacheItemPoolInterface
  {
    public function getItem($key);
    public function getItems(array $keys = []);
    public function hasItem($key);
    public function clear();
    public function deleteItem($key);
    public function deleteItems(array $keys);
    public function save(CacheItemInterface $item);
    public function saveDeferred(CacheItemInterface $item);
    public function commit();
  }
