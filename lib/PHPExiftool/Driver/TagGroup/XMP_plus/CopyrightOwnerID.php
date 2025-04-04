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
class CopyrightOwnerID extends AbstractTagGroup
{
    protected string $id = 'XMP-plus:CopyrightOwnerID';

    protected string $name = 'CopyrightOwnerID';

    protected ?string $phpType = 'string';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Copyright Owner ID',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : PLUS::XMP
             * line : 183357
             * type : string
             * writable : true
             * count :
             * flags : flattened,list
             */
            'id' => 'PLUS::XMP.XMP-plus:CopyrightOwnerID',
            'desc' => [
                'en' => 'Copyright Owner ID',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2112;
}
