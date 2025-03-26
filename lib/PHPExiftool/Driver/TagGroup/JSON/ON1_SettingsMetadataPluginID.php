<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\JSON;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class ON1_SettingsMetadataPluginID extends AbstractTagGroup
{
    protected string $id = 'JSON:ON1_SettingsMetadataPluginID';

    protected string $name = 'ON1_SettingsMetadataPluginID';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'ON1 Settings Metadata Plugin ID',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : JSON::Main
             * line : 105405
             * type : ?
             * writable : false
             * count :
             * flags :
             */
            'id' => 'JSON::Main.JSON:ON1_SettingsMetadataPluginID',
            'desc' => [
                'en' => 'ON1 Settings Metadata Plugin ID',
            ],
        ],
    ];

    protected int $count = 0;
}
