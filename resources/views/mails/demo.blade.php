Hello <i>{{ $demo->receiver }}</i>
<p>This is a demo email </p>
<p><u>Demo values</u></p>
<div>
    <p><b>demo One</b>&nbsp;{{ $demo->demo_one }}</p>
    <p><b>demo Two</b>&nbsp;{{ $demo->demo_two }}</p>
    <p><u>Values passed by </u></p>
    <div>
        <p><b>testVarOne:</b>&nbsp;{{ $testVarOne }}</p>
        <p><b>testVarTwo:</b>&nbsp;{{ $testVarTwo }}</p>
    </div>
    Thank you
    <br/>
<i>{{ $demo->sender }}</i>
</div>