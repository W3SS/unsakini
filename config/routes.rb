Rails.application.routes.draw do


  post 'user_token' => 'user_token#create'
  namespace :api do
    resources :boards
  end

  # namespace :api do
  #   get 'boards/index'
  # end

  # namespace :api do
  #   get 'boards/show'
  # end

  # namespace :api do
  #   get 'boards/update'
  # end

  # namespace :api do
  #   get 'boards/destroy'
  # end

  # namespace :api do
  #   get 'boards/create'
  # end

end
