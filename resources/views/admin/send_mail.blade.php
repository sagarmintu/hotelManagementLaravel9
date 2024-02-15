<!DOCTYPE html>
<html>
  <head> 
    <base href="/public">
    @include('admin.css')

    <style>
        label {
            display: inline-block;
            width: 200px;
        }

        .div_deg {
            padding-top: 30px;
        }
    </style>

  </head>
  <body>
    @include('admin.header')
    @include('admin.sidebar')
      
    <div class="page-content">
        <div class="page-header">
            <div class="container-fluid">
                <h1 style="font-size: 30px; font-weight: bold; text-align: center;">Mail Send To : {{ $contacts->name }}</h1>

                <form action="{{ url('mail',$contacts->id) }}" method="post">
                    @csrf
                    <div class="div_deg">
                        <label>Greeting</label>
                        <input type="text" name="greeting" class="form-control">
                    </div>
                    <div class="div_deg">
                        <label>Mail Body</label>
                        <textarea name="body" class="form-control"></textarea>
                    </div>
                    <div class="div_deg">
                        <label>Action Text</label>
                        <input type="text" name="action_text" class="form-control">
                    </div>
                    <div class="div_deg">
                        <label>Action URL</label>
                        <input type="text" name="action_url" class="form-control">
                    </div>
                    <div class="div_deg">
                        <label>End Line</label>
                        <input type="text" name="endline" class="form-control">
                    </div>
                    <div class="div_deg">
                        <input class="btn btn-primary" type="submit" value="Send Mail">
                    </div>
                </form>
            </div>
        </div>
    </div>

    @include('admin.footer')
  </body>
</html>