<?php
function testBreakStatementHasExpectedEndColumn()
{
    for ($i = 0; $i < 42; ++$i) {
        break
            2
                ;
    }
}