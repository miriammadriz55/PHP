document.getElementById('form').onsubmit = function() {
const user = document.getElementById('email').value;
var res = user.split("@");
if (document.getElementById("email").value ==""||!document.getElementById("email").value.includes("@")||!document.getElementById("email").value.endsWith(".com"))
    {
        alert("Must be a valid email");
        return false;
    }
    const pass = document.getElementById('password').value;
if (pass == "")
    {
        alert("Password field cannot be blank");
        return false;
    }
    const quantity1 = document.getElementById('item1').value;
    const quantity2 = document.getElementById('item2').value;
    const quantity3 = document.getElementById('item3').value;
if (quantity1 == "" || quantity2 == "" || quantity3 == "")
    {
        alert("Item quantities cannot be blank");
        return false;
    }
if (quantity1 < 0 || quantity2 < 0 || quantity3 < "")
    {
        alert("Item quantities cannot be less than one");
        return false;
    }
    const ship1 = document.getElementById('free').value;
    const ship2 = document.getElementById('overnight').value;
    const ship3 = document.getElementById('three').value;
if (ship1 == '' && ship2 == '' && ship3== '')
    {
        alert("Must pick a shipping option");
        return false;
    }
}
