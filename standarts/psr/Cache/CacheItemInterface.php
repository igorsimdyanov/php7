<?php ## Интерфейс CacheItemInterface.
  namespace Psr\Cache;

  interface CacheItemInterface
  {
    public function getKey();
    public function get();
    public function isHit();
    public function set($value);
    public function expiresAt($expiration);
    public function expiresAfter($time);
  }
