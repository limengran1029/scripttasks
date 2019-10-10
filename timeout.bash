#! /bin/bash

TIME=$1
PROCESS=${@:2}

$PROCESS &
PID=$!
sleep "$TIME"

if kill -0 "$PID";then
	kill -9 "$PID"
	echo "TIMEOUT"
	STATUS=1
else
	wait $PID
	STATUS=$?
fi 2>/dev/null

echo "SLUTSTATUS: $STATUS "

