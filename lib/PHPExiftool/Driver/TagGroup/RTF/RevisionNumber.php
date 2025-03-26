<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\RTF;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class RevisionNumber extends AbstractTagGroup
{
    protected string $id = 'RTF:RevisionNumber';

    protected string $name = 'RevisionNumber';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Revision Number',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : RTF::Main
             * line : 232077
             * type : ?
             * writable : false
             * count :
             * flags :
             */
            'id' => 'RTF::Main.RTF:RevisionNumber',
            'desc' => [
                'en' => 'Revision Number',
            ],
        ],
    ];

    protected int $count = 0;
}
