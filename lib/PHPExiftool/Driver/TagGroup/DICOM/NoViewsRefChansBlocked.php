<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\DICOM;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class NoViewsRefChansBlocked extends AbstractTagGroup
{
    protected string $id = 'DICOM:NoViewsRefChansBlocked';

    protected string $name = 'NoViewsRefChansBlocked';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'No Views Ref Chans Blocked',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : DICOM::Main
             * line : 73563
             * type : ?
             * writable : false
             * count :
             * flags :
             */
            'id' => 'DICOM::Main.DICOM:NoViewsRefChansBlocked',
            'desc' => [
                'en' => 'No Views Ref Chans Blocked',
            ],
        ],
    ];

    protected int $count = 0;
}
