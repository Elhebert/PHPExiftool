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
class EmbeddedEncodedRightsExprType extends AbstractTagGroup
{
    protected string $id = 'XMP-iptcExt:EmbeddedEncodedRightsExprType';

    protected string $name = 'EmbeddedEncodedRightsExprType';

    protected ?string $phpType = 'string';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Embedded Encoded Rights Expr Type',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : XMP::iptcExt
             * line : 289071
             * type : string
             * writable : true
             * count :
             * flags : flattened,list
             */
            'id' => 'XMP::iptcExt.XMP-iptcExt:EmbeddedEncodedRightsExprType',
            'desc' => [
                'en' => 'Embedded Encoded Rights Expr Type',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2112;
}
