<form>
    <input type="text" name="fn" pattern="/[a-z]{1,}/i" placeholder="First"/>
    <input type="text" name="ln" placeholder="Last" />
    <input type="number" name="id" pattern="[0-9]{8,8}"/>
    <input type="text" name="ucid" pattern="[a-z]{2,3}[0-9]{1,3}" placeholder="ucid"/>
    <input id="pw" type="password" name="password" minlength="8" /><button onclick="toggle(event)">Toggle</button>
    <input type="password" name="confirm"/>


</form>
<script>
    function toggle(event){
        event.preventDefault();
        let ele = document.getElementById("pw");
        if(ele.type==="text"){
            ele.type="password";
        }
        else{
            ele.type="text";
        }
    }
</script>