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
class EndUserID extends AbstractTagGroup
{
    protected string $id = 'XMP-plus:EndUserID';

    protected string $name = 'EndUserID';

    protected ?string $phpType = 'string';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'End User ID',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : PLUS::XMP
             * line : 183433
             * type : string
             * writable : true
             * count :
             * flags : flattened,list
             */
            'id' => 'PLUS::XMP.XMP-plus:EndUserID',
            'desc' => [
                'en' => 'End User ID',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2112;
}
