class SecondController < ApplicationController

  def index
    @ficelle = Second.all
  end
end
