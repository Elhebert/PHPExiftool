<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\JUMBF;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class JUMDLabel extends AbstractTagGroup
{
    protected string $id = 'JUMBF:JUMDLabel';

    protected string $name = 'JUMDLabel';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'JUMD Label',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Jpeg2000::JUMD
             * line : 105810
             * type : ?
             * writable : false
             * count :
             * flags :
             */
            'id' => 'Jpeg2000::JUMD.JUMBF:JUMDLabel',
            'desc' => [
                'en' => 'JUMD Label',
            ],
        ],
    ];

    protected int $count = 0;
}
