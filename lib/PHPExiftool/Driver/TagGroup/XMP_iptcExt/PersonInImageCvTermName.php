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
class PersonInImageCvTermName extends AbstractTagGroup
{
    protected string $id = 'XMP-iptcExt:PersonInImageCvTermName';

    protected string $name = 'PersonInImageCvTermName';

    protected ?string $phpType = 'string';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Person In Image Cv Term Name',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : XMP::iptcExt
             * line : 289339
             * type : lang-alt
             * writable : true
             * count :
             * flags : flattened,list
             */
            'id' => 'XMP::iptcExt.XMP-iptcExt:PersonInImageCvTermName',
            'desc' => [
                'en' => 'Person In Image Cv Term Name',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2112;
}
