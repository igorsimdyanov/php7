<?php ## Проверка IP-адреса.
  echo filter_var(
    '37.29.74.55',
    FILTER_VALIDATE_IP,
    FILTER_FLAG_NO_PRIV_RANGE)."<br />"; // 37.29.74.55
  echo filter_var(
    '192.168.0.1',
    FILTER_VALIDATE_IP,
    FILTER_FLAG_NO_PRIV_RANGE)."<br />"; // false
  echo filter_var(
   '127.0.0.1',
    FILTER_VALIDATE_IP,
    FILTER_FLAG_NO_PRIV_RANGE)."<br />"; // 127.0.0.1?

  echo filter_var('37.29.74.55',
    FILTER_VALIDATE_IP,
    FILTER_FLAG_NO_RES_RANGE)."<br />"; // 37.29.74.55
  echo filter_var(
   '192.168.0.1',
    FILTER_VALIDATE_IP,
    FILTER_FLAG_NO_RES_RANGE)."<br />"; // 192.168.0.1
  echo filter_var(
    '127.0.0.1',
    FILTER_VALIDATE_IP,
    FILTER_FLAG_NO_RES_RANGE)."<br />"; // false

  echo filter_var(
    '37.29.74.55',
    FILTER_VALIDATE_IP,
    FILTER_FLAG_IPV4)."<br />"; // 37.29.74.55
  echo filter_var(
    '37.29.74.55',
    FILTER_VALIDATE_IP,
    FILTER_FLAG_IPV6)."<br />"; // false

  echo filter_var(
    '2a03:f480:1:23::ca',
    FILTER_VALIDATE_IP,
    FILTER_FLAG_IPV4)."<br />"; // false
  echo filter_var(
    '2a03:f480:1:23::ca',
    FILTER_VALIDATE_IP,
    FILTER_FLAG_IPV6)."<br />"; // 2a03:f480:1:23::ca
?>