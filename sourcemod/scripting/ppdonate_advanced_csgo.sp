#pragma semicolon 1

#define PLUGIN_AUTHOR "Trinia"
#define PLUGIN_VERSION "1.0"

#include <sourcemod>

#pragma newdecls required

Handle g_donateurl = null;
Handle g_mode = INVALID_HANDLE;

public Plugin myinfo =
{
	name = "[ANY] PayPal Donations (Advanced)",
	author = PLUGIN_AUTHOR,
	description = "Advanced version of my PayPal Donations-Plugin with Website + PayPal API Payment Verification",
	version = PLUGIN_VERSION,
	url = "http://Trinia.pro"
};

public void OnPluginStart() {
	//Version CVar
	ConVar DonateVersionCVar = CreateConVar("donate_version", PLUGIN_VERSION, "Plugin Version", FCVAR_NOTIFY|FCVAR_DONTRECORD);

	//Plugin CVars
	g_donateurl = CreateConVar("sm_donate_url", "http://yourdomain.com/donate", "Web URL to the Donation Panel.");
	g_mode = CreateConVar("sm_donate_command", "donate", "Donate Command \nChoose your command for the donations here.");
	AutoExecConfig(true, "plugin.ppdonate_advanced");

	SetConVarString(DonateVersionCVar, PLUGIN_VERSION);

	char Command[32];
	char buffer[32];
	GetConVarString(g_mode, Command, sizeof(Command));
	Format(buffer, sizeof(buffer), "sm_%s", Command);
	RegConsoleCmd(buffer, command_donate, "Donate Command");
}

public Action command_donate(int i, int args) {
	if (i > 0 && i < MaxClients && IsClientConnected(i) && IsClientInGame(i)) {
			char buffer[192];
			char donateurl[192];
			GetConVarString(g_donateurl, donateurl, sizeof(donateurl));
			Format(buffer, sizeof(buffer), "https://trinia.pro/sourcemod/popup.html?web=%s", donateurl);
			ShowMOTDPanel(i, "PayPal Donation", buffer, MOTDPANEL_TYPE_URL);
	}
	return Plugin_Handled;
}
