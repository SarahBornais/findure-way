var alert = UIAlertView()
    alert.title = "HelloWorld"
    alert.message = "DO YOU WANT TO PLAY"
    alert.addButtonWithTitle("Yes")
    alert.addButtonWithTitle("No")
    alert.show()
    
class ViewController: UIViewController {

    override func viewDidLoad() {
        super.viewDidLoad()
        // Do any additional setup after loading the view, typically from a nib.
    }

    override func didReceiveMemoryWarning() {
        super.didReceiveMemoryWarning()
        // Dispose of any resources that can be recreated.
    }

    //Changing Status Bar
    override func preferredStatusBarStyle() -> UIStatusBarStyle {

        //LightContent
        return UIStatusBarStyle.LightContent

        //Default
        //return UIStatusBarStyle.Default

    }

}