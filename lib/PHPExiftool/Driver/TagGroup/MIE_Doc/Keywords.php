<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\MIE_Doc;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class Keywords extends AbstractTagGroup
{
    protected string $id = 'MIE-Doc:Keywords';

    protected string $name = 'Keywords';

    protected ?string $phpType = 'string';

    protected bool $isWritable = true;

    protected array $description = [
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : MIE::Doc
             * line : 163235
             * type : string
             * writable : true
             * count :
             * flags : list
             */
            'id' => 'MIE::Doc.MIE-Doc:Keywords',
            'desc' => [
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2112;
}
