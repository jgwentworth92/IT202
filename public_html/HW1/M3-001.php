<form>
    <input type="text" name="fn" maxlength="60" minlength="2" required pattern="[a-z]{2,60}"/>
    <input type="text" name="ln" maxlength="60" minlength="2" required pattern="[a-z]{2,60}"/>
    <input type="text" name="major"/>
    <input type="year" name="year"/>
    <input type="text" name="ucid" pattern="[a-z]{2,3}[0-9]{1,4}"/>
    <input id="pw" type="password" name="password" minlength="8"/>
    <input type="password" name="confirm" minlength="8"/><button onclick="toggle(event)">T</button>
    <input type="submit" value="Register Now!"/>
</form>
<script>
    function toggle(event){
        event.preventDefault();
        let ele = document.getElementById("pw");
        if(ele.type === "text"){
            ele.type = "password";
        }
        else{
            ele.type ="text";
        }
    }
</script>