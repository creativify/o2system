<?php
/**
 * O2Apps
 *
 * Application Engine under O2System Framework for PHP 5.2.4 or newer
 *
 * This content is released under PT. Lingkar Kreasi (Circle Creative) License
 *
 * Copyright (c) 2014, PT. Lingkar Kreasi (Circle Creative).
 *
 * Required
 * License Serial Number
 * This software cannot be used without any license serial number from PT. Lingkar Kreasi (Circle Creative) License
 * which is provided for single domain, multiple domain or white labeling (OEM).
 *
 * Permitted
 *  1. Private Use
 *     You may use and modify the software without distributing it. 
 *  2. Commercial Use
 *     This software and derivatives may be used for commercial purposes.
 *  3. Non-Commercial Use
 *     This software and derivatives may be used for non-commercial purposes.
 *  4. Distribution
 *     You may distribute this software as long you have license serial number from PT. Lingkar Kreasi (Circle Creative),
 *     which is provided for single domain, multiple domain or white labeling (OEM)
 *  5. Modification
 *     This software may be modified without warranty from from PT. Lingkar Kreasi (Circle Creative) and 
 *     PT. Lingkar Kreasi (Circle Creative) cannot be held liable for damages.
 *  6. Sublicensing
 *     You may grant a sublicense to modify and distribute this software to your clients / customers
 *     as long you have license serial number from PT. Lingkar Kreasi (Circle Creative),
 *     which is provided for single domain, multiple domain or white labeling (OEM).
 *  7. Use Trademark
 *     You may use the names, logos, or trademarks of O2Apps for promotion purposes.
 *     
 * Forbidden
 * Hold Liable
 * Software is provided without warranty of any kind if has been modified or added
 * and PT. Lingkar Kreasi (Circle Creative) cannot be held liable for damages.
 *
 * The above copyright notice and this permission notice shall be included in
 * all copies or substantial portions of the Software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND IF HAS BEEN MODIFIED OR ADDED.
 * IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 * OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
 * THE SOFTWARE.
 *
 * @package		O2System
 * @author		Steeven Andrian Salim
 * @copyright	Copyright (c) 2005 - 2014, PT. Lingkar Kreasi (Circle Creative).
 * @license		http://circle-creative.com/products/o2apps/license.html
 * @link		http://circle-creative.com
 * @since		Version 1.0
 * @filesource
 */

// ------------------------------------------------------------------------

defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Welcome Controller
 *
 * @package       Apps
 * @subpackage    Controllers
 * @category      Default Controller
 * 
 * @version       1.0 Build 24.09.2014
 * @author        Steeven Andrian Salim
 * @copyright     Copyright (c) 2014, PT. Lingkar Kreasi (Circle Creative)
 * @link          http://www.circle-creative.com/products/o2apps/user-guide/controllers/welcome.html
 */
// ------------------------------------------------------------------------
class App_Examples extends App_Controller
{
	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
        $this->load->view('examples');
	}

	public function load_drivers()
	{
		$this->load->driver('cache');
		print_out($this->session);
	}

	public function load_library()
	{
		print_line_marker('Test Load Inheritance Class', 'START', 15);
		$this->load->library('inheritance_class');
		print_line_marker('END');

		print_line_marker('Test Standalone Class', 'START', 15);
		$this->load->library('standalone_class');
		print_line_marker('END');

		print_line_marker('Test Load Standalone App Libraries', 'START', 15);
		$this->load->library('app_standalone');
		print_line_marker('END');

		print_line_marker('Test Load Standalone Active Module Class', 'START', 15);
		$this->load->library('frontpage/frontpage_standalone');
		print_line_marker('END');

		print_line_marker('Test Load Standalone Active Module Class', 'START', 15);
		$this->load->library('frontpage/satellite');
		print_line_marker('END');

		print_line_marker('Test Load Other App Standalone Class: apps/cms/libraries/', 'START', 15);
		$this->load->library('cms/standalone_class', 'cms_standalone');
		print_line_marker('END');

		print_line_marker('Test Load Other App Module Standalone Class: apps/cms/modules/dashboard/libraries/', 'START', 15);
		$this->load->library('cms/dashboard/dashboard_standalone');
		print_line_marker('END');

		print_line_marker('Test Load Other App Module Inheritance Class: apps/cms/modules/dashboard/libraries/', 'START', 15);
		$this->load->library('cms/dashboard/inheritance_class',array(),'cms_inheritance');
		print_line_marker('END');

		print_lines('', TRUE);
	}

	public function load_model()
	{
		print_line_marker('Load System Model Testing: system/models/', 'START', 15);
		$this->load->model('system');
		print_line_marker('END');

		print_line_marker('Load Root App Model Testing: apps/models/', 'START', 15);
		$this->load->model('testing');
		print_line_marker('END');

		print_line_marker('Load Active App Model Testing: apps/site/models/', 'START', 15);
		$this->load->model('settings');
		print_line_marker('END');

		print_line_marker('Test Load Active App Current Module Model: apps/site/modules/frontpage/models/', 'START', 15);
		$this->load->model('frontpage');
		print_line_marker('END');

		print_line_marker('Test Load Active App Other Module Model: apps/site/modules/pages/models/', 'START', 15);
		$this->load->model('pages');
		print_line_marker('END');

		print_line_marker('Test Load Other App Model: apps/cms/models/', 'START', 15);
		$this->load->model('cms/settings');
		print_line_marker('END');

		print_line_marker('Test Load Other App Module Model: apps/cms/modules/dashboard/models/', 'START', 15);
		$this->load->model('cms/dashboard');
		print_line_marker('END');

		print_lines('', TRUE);
	}

	public function load_helper()
	{
		print_lines('----- Test Load System Helpers and try to use it ------ START');
			$this->load->helper('text');
			$lorem = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.';
			$lorem = ellipsize($lorem, 50);
			print_lines($lorem);

			$text = 'Hello World!';
			$text = rewrite_text($text);
			print_lines($text);

		print_lines('----- Test Load System Helpers and try to use it ------ END');

		print_lines('', TRUE);
	}
}