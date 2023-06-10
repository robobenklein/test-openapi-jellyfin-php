# # NetworkConfiguration

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**require_https** | **bool** | Gets or sets a value indicating whether the server should force connections over HTTPS. | [optional]
**certificate_path** | **string** | Gets or sets the filesystem path of an X.509 certificate to use for SSL. | [optional]
**certificate_password** | **string** | Gets or sets the password required to access the X.509 certificate data in the file specified by Jellyfin.Networking.Configuration.NetworkConfiguration.CertificatePath. | [optional]
**base_url** | **string** | Gets or sets a value used to specify the URL prefix that your Jellyfin instance can be accessed at. | [optional]
**public_https_port** | **int** | Gets or sets the public HTTPS port. | [optional]
**http_server_port_number** | **int** | Gets or sets the HTTP server port number. | [optional]
**https_port_number** | **int** | Gets or sets the HTTPS server port number. | [optional]
**enable_https** | **bool** | Gets or sets a value indicating whether to use HTTPS. | [optional]
**public_port** | **int** | Gets or sets the public mapped port. | [optional]
**upn_p_create_http_port_map** | **bool** | Gets or sets a value indicating whether the http port should be mapped as part of UPnP automatic port forwarding. | [optional]
**udp_port_range** | **string** | Gets or sets the UDPPortRange. | [optional]
**enable_ipv6** | **bool** | Gets or sets a value indicating whether gets or sets IPV6 capability. | [optional]
**enable_ipv4** | **bool** | Gets or sets a value indicating whether gets or sets IPV4 capability. | [optional]
**enable_ssdp_tracing** | **bool** | Gets or sets a value indicating whether detailed SSDP logs are sent to the console/log.  \&quot;Emby.Dlna\&quot;: \&quot;Debug\&quot; must be set in logging.default.json for this property to have any effect. | [optional]
**ssdp_tracing_filter** | **string** | Gets or sets the SSDPTracingFilter  Gets or sets a value indicating whether an IP address is to be used to filter the detailed ssdp logs that are being sent to the console/log.  If the setting \&quot;Emby.Dlna\&quot;: \&quot;Debug\&quot; msut be set in logging.default.json for this property to work. | [optional]
**udp_send_count** | **int** | Gets or sets the number of times SSDP UDP messages are sent. | [optional]
**udp_send_delay** | **int** | Gets or sets the delay between each groups of SSDP messages (in ms). | [optional]
**ignore_virtual_interfaces** | **bool** | Gets or sets a value indicating whether address names that match Jellyfin.Networking.Configuration.NetworkConfiguration.VirtualInterfaceNames should be Ignore for the purposes of binding. | [optional]
**virtual_interface_names** | **string** | Gets or sets a value indicating the interfaces that should be ignored. The list can be comma separated. &lt;seealso cref&#x3D;\&quot;P:Jellyfin.Networking.Configuration.NetworkConfiguration.IgnoreVirtualInterfaces\&quot; /&gt;. | [optional]
**gateway_monitor_period** | **int** | Gets or sets the time (in seconds) between the pings of SSDP gateway monitor. | [optional]
**enable_multi_socket_binding** | **bool** | Gets a value indicating whether multi-socket binding is available. | [optional] [readonly]
**trust_all_ip6_interfaces** | **bool** | Gets or sets a value indicating whether all IPv6 interfaces should be treated as on the internal network.  Depending on the address range implemented ULA ranges might not be used. | [optional]
**hd_homerun_port_range** | **string** | Gets or sets the ports that HDHomerun uses. | [optional]
**published_server_uri_by_subnet** | **string[]** | Gets or sets the PublishedServerUriBySubnet  Gets or sets PublishedServerUri to advertise for specific subnets. | [optional]
**auto_discovery_tracing** | **bool** | Gets or sets a value indicating whether Autodiscovery tracing is enabled. | [optional]
**auto_discovery** | **bool** | Gets or sets a value indicating whether Autodiscovery is enabled. | [optional]
**remote_ip_filter** | **string[]** | Gets or sets the filter for remote IP connectivity. Used in conjuntion with &lt;seealso cref&#x3D;\&quot;P:Jellyfin.Networking.Configuration.NetworkConfiguration.IsRemoteIPFilterBlacklist\&quot; /&gt;. | [optional]
**is_remote_ip_filter_blacklist** | **bool** | Gets or sets a value indicating whether &lt;seealso cref&#x3D;\&quot;P:Jellyfin.Networking.Configuration.NetworkConfiguration.RemoteIPFilter\&quot; /&gt; contains a blacklist or a whitelist. Default is a whitelist. | [optional]
**enable_upn_p** | **bool** | Gets or sets a value indicating whether to enable automatic port forwarding. | [optional]
**enable_remote_access** | **bool** | Gets or sets a value indicating whether access outside of the LAN is permitted. | [optional]
**local_network_subnets** | **string[]** | Gets or sets the subnets that are deemed to make up the LAN. | [optional]
**local_network_addresses** | **string[]** | Gets or sets the interface addresses which Jellyfin will bind to. If empty, all interfaces will be used. | [optional]
**known_proxies** | **string[]** | Gets or sets the known proxies. If the proxy is a network, it&#39;s added to the KnownNetworks. | [optional]
**enable_published_server_uri_by_request** | **bool** | Gets or sets a value indicating whether the published server uri is based on information in HTTP requests. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
