<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\XMP_plus;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class PropertyReleaseID extends AbstractTagGroup
{
    protected string $id = 'XMP-plus:PropertyReleaseID';

    protected string $name = 'PropertyReleaseID';

    protected ?string $phpType = 'string';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Property Release ID',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : PLUS::XMP
             * line : 190247
             * type : string
             * writable : true
             * count :
             * flags : bag,list
             */
            'id' => 'PLUS::XMP.XMP-plus:PropertyReleaseID',
            'desc' => [
                'en' => 'Property Release ID',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2368;
}
