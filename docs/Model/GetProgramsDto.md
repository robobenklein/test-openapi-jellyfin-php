# # GetProgramsDto

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**channel_ids** | **string[]** | Gets or sets the channels to return guide information for. | [optional]
**user_id** | **string** | Gets or sets optional. Filter by user id. | [optional]
**min_start_date** | **\DateTime** | Gets or sets the minimum premiere start date.  Optional. | [optional]
**has_aired** | **bool** | Gets or sets filter by programs that have completed airing, or not.  Optional. | [optional]
**is_airing** | **bool** | Gets or sets filter by programs that are currently airing, or not.  Optional. | [optional]
**max_start_date** | **\DateTime** | Gets or sets the maximum premiere start date.  Optional. | [optional]
**min_end_date** | **\DateTime** | Gets or sets the minimum premiere end date.  Optional. | [optional]
**max_end_date** | **\DateTime** | Gets or sets the maximum premiere end date.  Optional. | [optional]
**is_movie** | **bool** | Gets or sets filter for movies.  Optional. | [optional]
**is_series** | **bool** | Gets or sets filter for series.  Optional. | [optional]
**is_news** | **bool** | Gets or sets filter for news.  Optional. | [optional]
**is_kids** | **bool** | Gets or sets filter for kids.  Optional. | [optional]
**is_sports** | **bool** | Gets or sets filter for sports.  Optional. | [optional]
**start_index** | **int** | Gets or sets the record index to start at. All items with a lower index will be dropped from the results.  Optional. | [optional]
**limit** | **int** | Gets or sets the maximum number of records to return.  Optional. | [optional]
**sort_by** | **string[]** | Gets or sets specify one or more sort orders, comma delimited. Options: Name, StartDate.  Optional. | [optional]
**sort_order** | [**\OpenAPI\Client\Model\SortOrder[]**](SortOrder.md) | Gets or sets sort Order - Ascending,Descending. | [optional]
**genres** | **string[]** | Gets or sets the genres to return guide information for. | [optional]
**genre_ids** | **string[]** | Gets or sets the genre ids to return guide information for. | [optional]
**enable_images** | **bool** | Gets or sets include image information in output.  Optional. | [optional]
**enable_total_record_count** | **bool** | Gets or sets a value indicating whether retrieve total record count. | [optional]
**image_type_limit** | **int** | Gets or sets the max number of images to return, per image type.  Optional. | [optional]
**enable_image_types** | [**\OpenAPI\Client\Model\ImageType[]**](ImageType.md) | Gets or sets the image types to include in the output.  Optional. | [optional]
**enable_user_data** | **bool** | Gets or sets include user data.  Optional. | [optional]
**series_timer_id** | **string** | Gets or sets filter by series timer id.  Optional. | [optional]
**library_series_id** | **string** | Gets or sets filter by library series id.  Optional. | [optional]
**fields** | [**\OpenAPI\Client\Model\ItemFields[]**](ItemFields.md) | Gets or sets specify additional fields of information to return in the output. This allows multiple, comma delimited. Options: Budget, Chapters, DateCreated, Genres, HomePageUrl, IndexOptions, MediaStreams, Overview, ParentId, Path, People, ProviderIds, PrimaryImageAspectRatio, Revenue, SortName, Studios, Taglines.  Optional. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
