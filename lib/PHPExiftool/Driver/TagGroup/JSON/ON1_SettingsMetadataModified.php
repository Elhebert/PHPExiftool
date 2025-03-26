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
class ON1_SettingsMetadataModified extends AbstractTagGroup
{
    protected string $id = 'JSON:ON1_SettingsMetadataModified';

    protected string $name = 'ON1_SettingsMetadataModified';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : JSON::Main
             * line : 153381
             * type : ?
             * writable : false
             * count :
             * flags :
             */
            'id' => 'JSON::Main.JSON:ON1_SettingsMetadataModified',
            'desc' => [
            ],
        ],
    ];

    protected int $count = 0;
}
