<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\MXF;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class MetadataServerLocators extends AbstractTagGroup
{
    protected string $id = 'MXF:MetadataServerLocators';

    protected string $name = 'MetadataServerLocators';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Metadata Server Locators',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : MXF::Main
             * line : 117790
             * type : ?
             * writable : false
             * count :
             * flags : unknown
             */
            'id' => 'MXF::Main.MXF:MetadataServerLocators',
            'desc' => [
                'en' => 'Metadata Server Locators',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 32;
}
