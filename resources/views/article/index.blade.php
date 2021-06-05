@extends('layouts.app')

@section('content')
<style>
    .toggle {
  width: 50px;
  height: 50px;
  background: #c70039;
  border-radius: 50%;
  cursor: pointer;
  position: relative;
}

.toggle::before {
  content: '\f1e0';
  width: 100%;
  height: 100%;
  position: absolute;
  color: white;
  font-family: 'Font Awesome 5 Free';
  font-weight: 900;
  text-align: center;
  line-height: 50px;
  font-size: 22px;
}.share.active .toggle::before {
  content: '\f00d';
  font-size: 2rem;
}
.share {
  position: fixed;
  bottom: 450px;
  right: 190px;
}
.share ol {
  position: absolute;
  width: 100px;
  height: 50px;
}.share ol li {
  position: absolute;
  width: 50px;
  height: 50px;
  background: white;
  display: flex;
  align-items: center;
  justify-content: center;
  border-radius: 50%;
  transition: all .3s;
  opacity: 0;
}

.share ol li a {
  color:black;
}

.share.active ol li {
  opacity: 1;
  transition: all .3s;
}.share.active ol li:nth-child(1) {
  transition-delay: .1s;
  transform: translateX(75px);
}

.share.active ol li:nth-child(2) {
  transition-delay: .2s;
  transform: translateY(75px);
}

.share.active ol li:nth-child(3) {
  transition-delay: .3s;
  transform: translateX(-75px);
}

.share.active ol li:nth-child(4) {
  transition-delay: .4s;
  transform: translateY(-75px);
}
</style>
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card">
                    <div class="card-header"><i class="fa fa-align-justify"></i> Mes Articles</div>
                    <div class="card-body">
                        <table class="table table-responsive-sm table-striped">
                            <thead>
                            <tr>
                                <th>Titre</th>
                                <th>Categorie</th>
                                <th>Date Creation</th>
                                <th>Action</th>
                                <th>Partager</th>
                            </tr>
                            </thead>
                            <tbody>
                                @foreach($articles as $article)
                                    <tr>
                                        <td>{{ $article->titre }}</td>
                                        <td>{{ $article->categorie->nom }}</td>
                                        <td>{{ $article->created_at->format('Y-m-d H:i:s') }}</td>
                                        <td>
                                            <a href="{{ route('article.read', ['article' => $article->id]) }}" class="btn btn-sm btn-primary">Lire</a>
                                            <a href="{{ route('article.destroy', ['article' => $article->id]) }}" class="btn btn-sm btn-danger">Supprimer</a>
                                        </td>
                                        <td>
                                        <link rel=”stylesheet” href=”https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css”>
                                        <div class="share">
                                      <ol>
                                        <li><a href="https://www.instagram.com/?hl=fr"><i class="fab fa-instagram fa-2x"></i></a></li>
                                        <li><a href="https://www.facebook.com/"><i class="fab fa-facebook fa-2x"></i></a></li>
                
                                        <li><a href="#"><i class="fab fa-whatsapp fa-2x"></i></a></li>
                                        <li><a href="https://twitter.com/?lang=fr"><i class="fab fa-twitter fa-2x"></i></a></li>
                                       </ol>
                                        <div class="toggle"></div>
                                      </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        const toggle = document.querySelector('.toggle');

toggle.addEventListener('click', () => {
  const shareBtn = document.querySelector('.share');
  shareBtn.classList.toggle('active');
});
    </script>
@endsection
