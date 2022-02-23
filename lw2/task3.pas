PROGRAM WriteName(INPUT, OUTPUT);
USES
  DOS;
BEGIN{WriteName}
  WRITELN;
  IF GetEnv('QUERY_STRING') <> ''
  THEN
    IF GetEnv('QUERY_STRING') = 'name='
    THEN
      WRITELN('Hello Anonymous!')
    ELSE
      WRITELN('Hello, dear ', COPY(GetEnv('QUERY_STRING'), POS('name=', GetEnv('QUERY_STRING')) + 5), '!')
END.{WriteName}
