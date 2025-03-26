<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\XMP_iptcExt;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class ModelAge extends AbstractTagGroup
{
    protected string $id = 'XMP-iptcExt:ModelAge';

    protected string $name = 'ModelAge';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Model Age',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : XMP::iptcExt
             * line : 289306
             * type : integer
             * writable : true
             * count :
             * flags : bag,list
             */
            'id' => 'XMP::iptcExt.XMP-iptcExt:ModelAge',
            'desc' => [
                'en' => 'Model Age',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2368;
}
