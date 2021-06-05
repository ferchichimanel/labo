<div class="sidebar">
    <div class="sidebar-wrapper">
        <div class="logo">
            <a href="{{ route('home') }}" class="simple-text logo-mini">{{ __('DL') }}</a>
            <a href="{{ route('home') }}" class="simple-text logo-normal">{{ __('Doctor Lab') }}</a>
        </div>
        <ul class="nav">
            <li class="active">
                <a href="{{ route('home') }}">
                    <i class="tim-icons icon-chart-pie-36"></i>
                    <p>{{ __('Dashboard') }}</p>
                </a>
            </li>
            <li>
                <a data-toggle="collapse" href="#articles" aria-expanded="true">
                    <i class="fa fa-book" ></i>
                    <span class="nav-link-text" >{{ __('Articles') }}</span>
                    <b class="caret mt-1"></b>
                </a>

                <div class="collapse show" id="articles">
                    <ul class="nav pl-4">
                        <li>
                            <a href="{{ route('article.create')  }}">
                                <i class="fa fa-plus"></i>
                                <p>{{ __('Ajouter') }}</p>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('article.index')  }}">
                                <i class="tim-icons icon-bullet-list-67"></i>
                                <p>{{ __('Mes Articles') }}</p>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
            <li>
                <a data-toggle="collapse" href="#categories" aria-expanded="true">
                    <i class="fa fa-book" ></i>
                    <span class="nav-link-text" >{{ __('type de diabète') }}</span>
                    <b class="caret mt-1"></b>
                </a>

                <div class="collapse show" id="categories">
                    <ul class="nav pl-4">
                        <li>
                            <a href="{{ route('categorie.create')  }}">
                                <i class="fa fa-plus"></i>
                                <p>{{ __('Ajouter type de diabète') }}</p>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('categorie.index')  }}">
                                <i class="tim-icons icon-bullet-list-67"></i>
                                <p>{{ __('Liste des types de diabète') }}</p>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
            <li>
                <a data-toggle="collapse" href="#Produits" aria-expanded="true">
                    <i class="fa fa-book" ></i>
                    <span class="nav-link-text" >{{ __('Produits') }}</span>
                    <b class="caret mt-1"></b>
                </a>

                <div class="collapse show" id="Produits">
                    <ul class="nav pl-4">
                        <li>
                            <a href="{{ route('produit.type', ['type' => \App\Models\Produit::TYPE_1]) }}"">
                                <i class="tim-icons icon-bullet-list-67"></i>
                                <p>{{ __('Produit pharmaceutique') }}</p>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('produit.type', ['type' => \App\Models\Produit::TYPE_1]) }}">
                                <i class="tim-icons icon-bullet-list-67"></i>
                                <p>{{ __('Produi Parapharma') }}</p>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
            
            <li>
                <a href="{{ route('stats.index') }}">
                    <i class="fa fa-stat"></i>
                    Statistiques
                </a>
            </li>
            <li>
                <a href="{{ route('recommendation.index') }}">
                    <i class="fa fa-tasks"></i>
                    Recommendations
                </a>
            </li>
        </ul>
    </div>
</div>
