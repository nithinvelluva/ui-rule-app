(function(){
    const {pathname} = window.location;
    const alertText = "{{$alert_text}}";
 
    function CheckURI(uri='',condition){
        switch(condition){
            case 'contains': return pathname.includes(uri)
            case'equals': return `/${uri}` === pathname;
            case 'starts_with':return pathname.startsWith(`/${uri}`)
            case 'end_with':return (pathname.endsWith(uri) ||   pathname.endsWith(`${uri}/`))
        }
    }

    let positiveRulesCount = 0;
    let negativeRulesCount = 0;
    @foreach($triggers as $rule)
    if(CheckURI("{{$rule['uri']}}","{{$rule['condition']}}")){
        if({{$rule['enable_alert']}}){
            ++positiveRulesCount;
        }
        else{
            ++negativeRulesCount;
        }
    }
    @endforeach
    if(positiveRulesCount > 0 && negativeRulesCount === 0){
        alert(alertText);
    }
})();
