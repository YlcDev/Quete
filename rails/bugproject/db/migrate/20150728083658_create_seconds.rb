class CreateSeconds < ActiveRecord::Migration
  def change
    create_table :seconds do |t|
      t.string :ficelle

      t.timestamps null: false
    end
  end
end
