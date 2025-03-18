<div>
    <form action="/registered" method="post">
        @csrf
        <input type="text" name="studentName" placeholder="Enter the name"><br>
        <input type="email" name="studentEmail" placeholder="Enter the email"><br>
        <input type="number" name="studentBatch" placeholder="Enter the batch"><br>
        <button>Submit</button>

    </form>
    <!-- It is not the man who has too little, but the man who craves more, that is poor. - Seneca -->
</div>
