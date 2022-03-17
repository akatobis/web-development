PROGRAM WebSara(INPUT, OUTPUT);
USES
  Dos;
VAR
  Str: STRING;
BEGIN
  WRITELN('Content-Type: text/plain');
  WRITELN;
  Str := GetEnv('QUERY_STRING');
  IF Str = 'lanterns=1'
  THEN
    WRITELN('The British are coming by sea.')
  ELSE
    IF Str = 'lanterns=2'
    THEN
      WRITELN('The British are coming by land.')
    ELSE
      WRITELN('Sara didn''t say')
END.
