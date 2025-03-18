<div>
    <h1>Form Template</h1>
    <form action="formSubmit" method="post">
        @csrf
        <div>
            <input class= "type1" type="text" placeholder="Enter your name" name="name" value={{old('name')}}>
            <span style='color:red'>@error('name'){{'**'.$message}}@enderror</span>
            <br>
            <input class= "type1" type="text" placeholder="Enter your address" name="address" value={{old('address')}}>
            <span style='color:red'>@error('address'){{'**'.$message}}@enderror</span>
            <br>
            <input class= "type1" type="email" placeholder="Enter your email" name="email" value={{old('email')}}>
            <span style='color:red'>@error('email'){{'**'.$message}}@enderror</span>
            <br>
            <input class= "type1" type="number" placeholder="Enter your number" name="number">
            <span style='color:red'>@error('number'){{'**'.$message}}@enderror</span>
            <br>
            <input type="password" name="password" placeholder="Enter Password" value={{old('password')}}>

            <input type="password" name="password_confirmation" placeholder="Confirm Password">
            <span style="color:red">@error('password') {{'**'.$message }} @enderror</span>

        </div>
        <div>
            <h3>User Skills</h3>
            <input type="checkbox" name="skill[]" value="php" id="php">
            <label for="php">PHP</label>
            <input type="checkbox" name="skill[]" value="nodejs" id="nodejs">
            <label for="nodejs">Nodejs</label>
            <input type="checkbox" name="skill[]" value="reactjs" id="reactjs">
            <label for="reactjs">Reactjs</label>
            <input type="checkbox" name="skill[]" value="python" id="python">
            <label for="python">Python</label>
            <span style='color:red'>@error('skill'){{'**'.$message}}@enderror</span>

        </div>
        <div>
            <h3>Gender</h3>
            <input type="radio" name="gender" value="male" id="male">
            <label for="male">Male</label>
            <input type="radio" name="gender" value="female" id="female">
            <label for="female">Female</label>
            <span style='color:red'>@error('gender'){{'**'.$message}}@enderror</span>
            
        </div>

        <div>
            <h3>City</h3>
            <select name="city">
                <option value="kanpur">Kanpur</option>
                <option value="Lucknow">Lucknow</option>
                <option value="Gorakhpur">Gorakhpur</option>
                <option value="Mathura">Mathura</option>
                <span style='color:red'>@error('city'){{'**'.$message}}@enderror</span>
            </select>
        </div>
        <button>Add New User</button>
    </form>

    <style>
        .type1 {
            border: 2px blue solid;
            height: 40;
            width: 250px;
            padding: 10px;
            margin: 2px;
        }
        button {
            border: 2px blue black;
            font-size: large;
            background-color: greenyellow;
            height: 40px;
            width: 250px;
            padding:10px;
            margin: 10px;
        }
    </style>
    <!-- The biggest battle is the war against ignorance. - Mustafa Kemal Atatürk -->
</div>
