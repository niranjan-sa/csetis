import java.io.File;
import java.util.Arrays;
import java.util.regex.Pattern;

/*
 * This program is to crawl the file tree to find the media files
 * Crawler
 * */

class Crawler extends Thread {
	private File mount;
	StringBuffer names;
	long count;

	public Crawler() {
		
	}
	
	public Crawler(File mtPoint) {
		super();
		mount=mtPoint;
		names=new StringBuffer("");
		count=0;
	}

	public void crawl(File mt) {
		File[] list=mt.listFiles();
		for(File f: list) {
			if(f.isDirectory()) {
				crawl(f);
			} else {
				if(f.getName().endsWith(".mp3")) {
					names.append(f.getAbsolutePath()+"\n");
					count++;
				}
			}
		}
		System.out.println(""+count+" Files were found");
		System.out.println(names);
	}
	
	public void run() {
		if(mount!=null) {
			crawl(mount);
		} else {
			System.out.println("po");
		}
		
	}
}

public class CrawlFileTree {

	public static void main(String[] args) {
		String ext=".mp3";
		String dev="C:/";
		File f=new File(dev);
		System.out.println(f.exists());
		Crawler c1=new Crawler(f);
		c1.start();
		
		/*try {
			c1.join();
		} catch (InterruptedException e) {
			e.printStackTrace();
		}*/
	}

}
