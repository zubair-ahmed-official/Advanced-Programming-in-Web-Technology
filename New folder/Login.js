import {useState} from 'react';
import axios from 'axios';

const Login=()=>{
    const[uname,setUname] = useState("");
    const[pass,setPass] = useState("");
    const[msg,setMsg] = useState("");

    const handleForm=(e)=>{
        e.preventDefault();
        
        var obj = {username:uname,password:pass};
        
        axios.post("http://127.0.0.1:8000/api/login/post",obj).then((succ)=>{
            debugger;
            if(succ.data.succmsg){
               
               setMsg("Login Successful"); 
            }
            else {
                setMsg("Login failed");
            }
        },(err)=>{

        });
        //alert(uname + " " +pass);
    }
    return(
        <div class="container">
            
            <div class="card">
            <div class="card-header">
                    <h4> 
                    Login Form
                    </h4>        
                </div>

                <div class="card-body">
                
                <form class="container" onSubmit={handleForm}>
                <div class="form-group mb-3">
                <label for="">Name: </label>                
                <input class="form-control col-sm-4" type="text" value={uname} onChange={function(e){setUname(e.target.value)}} placeholder="Username"></input><br/>
                </div>
                <div class="form-group mb-3">
                <label for="">Password: </label>
                <input class="form-control col-sm-4" type="password" value={pass} onChange={(e)=>{setPass(e.target.value)}} placeholder="Password"></input><br/>
                </div>
                <input class="btn btn-outline-success" type="submit" value="Login"></input>
                <br></br><br></br>
                
                <h2 class="alert-warning">{msg}</h2>
               
                </form>
                </div>
                </div>
        </div>   
    )
}
export default Login;