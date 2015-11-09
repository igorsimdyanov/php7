<?php ## Классификация исключений.
  interface IException {}
    interface IInternalException extends IException {}
      interface IFileException extends IInternalException {}
      interface INetException extends IInternalException {}
    interface IUserException extends IException {}
?>