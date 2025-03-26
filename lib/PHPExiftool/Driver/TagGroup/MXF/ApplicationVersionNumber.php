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
class ApplicationVersionNumber extends AbstractTagGroup
{
    protected string $id = 'MXF:ApplicationVersionNumber';

    protected string $name = 'ApplicationVersionNumber';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Application Version Number',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : MXF::Main
             * line : 115710
             * type : ?
             * writable : false
             * count :
             * flags :
             */
            'id' => 'MXF::Main.MXF:ApplicationVersionNumber',
            'desc' => [
                'en' => 'Application Version Number',
            ],
        ],
    ];

    protected int $count = 0;
}
