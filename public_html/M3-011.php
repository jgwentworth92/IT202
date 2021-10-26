<form>
    <input type="text" name="fn" required minlength="2"/>
    <input type="text" name="ln" required minlength="2"/>
    <input type="email" name="email" required/>
    <input type="text" name="ucid" pattern="[a-z]{2,3}[0-9]{2,3}"/>
    <input id="pw" type="password" name="pw"/><button onclick="toggle(event)">Toggel</button>
</form>
<script>
    function toggle(event){
        event.preventDefault();
        let ele = document.getElementById("pw");
        if(ele.type === "text"){
            ele.type = "password";
        }
        else{
            ele.type = "text";
        }
    }
</script>