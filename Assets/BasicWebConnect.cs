using System.Collections;
using System.Collections.Generic;
using UnityEngine;

public class BasicWebConnect : MonoBehaviour {

	public string url;
	public string phpFileName;

	void Start () 
	{
		WWWForm wf = new WWWForm ();
		wf.AddField ("select", "show");
		StartCoroutine (WebPlay (wf));
	}

	WWW www;
	IEnumerator WebPlay ( WWWForm wf )
	{
		result = "";
		www = new WWW (url + "/" + phpFileName, wf);
		yield return www;
		result = www.text;
	}

	public string result;
	
}
