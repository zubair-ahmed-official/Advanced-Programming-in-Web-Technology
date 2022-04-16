import {useState} from 'react';
import axios from 'axios';

const Register=()=>{
    const [uname,setUname] = useState("");
    const [pass,setPass] = useState("");
    const [name,setName] = useState("");
    const [gender,setGender] = useState("");
    const [phone,setPhone] = useState("");
    const [email,setEmail] = useState("");
    const [address,setAddress] = useState("");

    const handleForm=(e)=>{
        e.preventDefault();
        var obj = {username:uname,password:pass,name:name,gender:gender,phone:phone,email:email,address:address};
        axios.post("http://127.0.0.1:8000/api/register/post",obj).then((resp)=>{
            debugger;
        },(err)=>{});

    }
    return(
        <div class="container">
            
            <div class="card">
            <div class="card-header">
                    <h4> 
                    Register
                    </h4>        
                </div>

                <div class="card-body">
                
        <form onSubmit={handleForm}>

            <div class="form-group">
            <label for=""> UserName: </label>
            <input type="text" class="form-control col-sm-5" value={uname} onChange={(e)=>{setUname(e.target.value)}} placeholder='UserName'></input> 
            </div>

            <div class="form-group mb-3">
            <label for=""> Password: </label>
            <input type="text" class="form-control col-sm-5" value={pass} onChange={(e)=>{setPass(e.target.value)}} placeholder='Password'></input>
            </div>

            <div class="form-group mb-3">
            <label for=""> Name: </label>
            <input type="text" class="form-control col-sm-5" value={name} onChange={(e)=>{setName(e.target.value)}} placeholder='Name'></input>
            </div>

            <div class="form-group mb-3">
            <label for=""> Gender: </label>
            <input type="text" class="form-control col-sm-5" value={gender} onChange={(e)=>{setGender(e.target.value)}} placeholder='Gender'></input>
            </div>

            <div class="form-group mb-3">
            <label for=""> Phone: </label>
            <input type="text" class="form-control col-sm-5" value={phone} onChange={(e)=>{setPhone(e.target.value)}} placeholder='Phone'></input>
            </div>

            <div class="form-group mb-3">
            <label for=""> Email: </label>
            <input type="text" class="form-control col-sm-5" value={email} onChange={(e)=>{setEmail(e.target.value)}} placeholder='Email'></input>
            </div>

            <div class="form-group mb-3">
            <label for=""> Address: </label>
            <input type="text" class="form-control col-sm-5" value={address} onChange={(e)=>{setAddress(e.target.value)}} placeholder='Address'></input>
            </div>

            <input class="btn btn-outline-success" type="submit" value="Register"/>
        </form>
        </div>
        </div>
        </div>
    )

}
export default Register;
