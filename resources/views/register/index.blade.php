<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>Registration Form</title>
    <style>body {
  width: 100%;
  height: 100vh;
  margin: 0;
  background-color: #1b1b32;
  color: #f5f6f7;
  font-family: Tahoma;
  font-size: 16px;
}

h1, p {
  margin: 1em auto;
  text-align: center;
}

form {
  width: 60vw;
  max-width: 500px;
  min-width: 300px;
  margin: 0 auto;
  padding-bottom: 2em;
}

fieldset {
  border: none;
  padding: 2rem 0;
  border-bottom: 3px solid #3b3b4f;
}

fieldset:last-of-type {
  border-bottom: none;
}

label {
  display: block;
  margin: 0.5rem 0;
}

input,
textarea,
select {
  margin: 10px 0 0 0;
  width: 100%;
  min-height: 2em;
}

input, textarea {
  background-color: #0a0a23;
  border: 1px solid #0a0a23;
  color: #ffffff;
}

.inline {
  width: unset;
  margin: 0 0.5em 0 0;
  vertical-align: middle;
}

input[type="submit"] {
  display: block;
  width: 60%;
  margin: 1em auto;
  height: 2em;
  font-size: 1.1rem;
  background-color: #3b3b4f;
  border-color: white;
  min-width: 300px;
}

input[type="file"] {
  padding: 1px 2px;
}

a {
  color: #dfdfe2
}
</style>

  </head>
  <body>
    <h1>Registration Form</h1>
    <p>Please fill out this form with the required information</p>
    <form action="/registerpost" method="post" >
        @csrf
      <fieldset>
        <label for="username">Enter Your Username: <input id="username" name="username" type="text" required /></label>

        <label for="email">Enter Your Email: <input id="email" name="email" type="email" required /></label>
        <label for="password">Create a New Password: <input id="password" name="password" type="password"  required /></label>
     <label for="new-password">Repeat Password: <input id="new-password" name="new-password" type="password"  required /></label>
    </fieldset>

      <input type="submit" value="Submit" />
    </form>
  </body>
</html>
