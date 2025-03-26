<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\XMP_dwc;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class RelationshipOfResource extends AbstractTagGroup
{
    protected string $id = 'XMP-dwc:RelationshipOfResource';

    protected string $name = 'RelationshipOfResource';

    protected ?string $phpType = 'string';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Relationship Of Resource',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : DarwinCore::Main
             * line : 78920
             * type : string
             * writable : true
             * count :
             * flags : flattened
             */
            'id' => 'DarwinCore::Main.XMP-dwc:RelationshipOfResource',
            'desc' => [
                'en' => 'Relationship Of Resource',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2048;
}
