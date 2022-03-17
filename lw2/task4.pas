PROGRAM WorkWithQueryString(INPUT, OUTPUT);
USES
  DOS;
FUNCTION GetQueryStringParameter(Key: STRING): STRING;
VAR
  StartPosition, FinishPosition, LengthBefore, IsAp: INTEGER;
BEGIN{GetQueryStringParameter}
  FinishPosition := 0;
  StartPosition := 0;
  LengthBefore := 0;
  StartPosition := POS(Key, GetEnv('QUERY_STRING'));
  IF StartPosition <> 0
  THEN
    BEGIN
      LengthBefore := StartPosition - 1;
      IsAp := POS('&', COPY(GetEnv('QUERY_STRING'), POS(Key, GetEnv('QUERY_STRING'))));
      IF IsAp <> 0
      THEN
        FinishPosition := IsAp + LengthBefore;
      IF FinishPosition <> 0
      THEN
        GetQueryStringParameter := COPY(GetEnv('QUERY_STRING'), StartPosition + Length(Key) + 1, FinishPosition - Length(Key) - StartPosition - 1)
      ELSE
        GetQueryStringParameter := COPY(GetEnv('QUERY_STRING'), StartPosition + Length(Key) + 1, Length(GetEnv('QUERY_STRING')) - StartPosition - Length(Key));
    END
  ELSE
    GetQueryStringParameter := 'Parameter not found'
END;{GetQueryStringParameter}
BEGIN{WorkWithQueryString}
  WRITELN('Content-Type: text/plain');
  WRITELN;
  WRITELN('First Name: ', GetQueryStringParameter('first_name'));
  WRITELN('Last Name: ', GetQueryStringParameter('last_name'));
  WRITELN('Age: ', GetQueryStringParameter('age'))
END.{WorkWithQueryString}
