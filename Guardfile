# A sample Guardfile
# More info at https://github.com/guard/guard#readme

guard 'phpunit2', :cli => '--colors', tests_path: 'tests' do

  watch(%r{^.+Test\.php$})

  watch(%r{lib/Teacup/I18n/(.+)\.php}) { |m| "tests/Teacup/I18n/#{m[1]}Test.php" }
end
